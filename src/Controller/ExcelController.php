<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

// ORM
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;

// USERS
use App\Entity\Users;

// EXCEL
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// DOWNLOAD EXCEL
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Request;

use App\Form\FormSelectType;

class ExcelController extends AbstractController
{
    #[Route('/', name: 'generarExcel')]
    public function generarExcel(Request $request): Response
    {
        $form               = $this->createForm(FormSelectType::class, null, [
            "action"        => $this->generateUrl("donwloadExcel"),
            "method"        => "GET",
        ]);
        $form->handleRequest($request);

        // if ($form->isSubmitted() && $form->isValid()) {
            // $fieldSelect = $form->getData();  
            // return $this->redirectToRoute('donwloadExcel', $fieldSelect);
        // }

        return $this->render('components/GenerateExcel.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/donwloadExcel', name: 'donwloadExcel')]
    public function donwloadExcel(EntityManagerInterface $entityManager): Response
    {   
        $config             = $this->getParameter("config");
        $repository         = $entityManager->getRepository(Users::class);
        $query              = $repository->createQueryBuilder("u");
        $spreadsheet        = new Spreadsheet();
        $activeWorksheet    = $spreadsheet->getActiveSheet();
        $letters            = "A";

        foreach ($config as $key => $item){
            $query->addSelect("u.$item");
            $activeWorksheet->setCellValue($letters . "1", $item);
            $letters++;
        }

        $result             = $query->getQuery()->getResult(Query::HYDRATE_ARRAY);

        foreach($result as $key => $item){
            $letters        = "A";
            foreach ($config as $itemKey){
                $activeWorksheet->setCellValue($letters . ($key + 2), $item[0][$itemKey]);
                $letters++;
            }            
        }
        
        $tempFilePath       = sys_get_temp_dir() . "/users.xlsx";
        $writer             = new Xlsx($spreadsheet);
        $writer->save($tempFilePath);

        $response           = new BinaryFileResponse($tempFilePath);
        $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, "users.xlsx");

        return $response;

    }
}
