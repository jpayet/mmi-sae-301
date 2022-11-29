<?php

namespace App\Controller\Admin;

use App\Entity\Lieux;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LieuxCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lieux::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('lieu_nom'),
            TextField::new('lieu_adr'),
            NumberField::new('lieu_capacite'),
            ImageField::new('lieu_affiche')->setBasePath('uploads/lieux/')->setUploadDir('public/uploads/'),
        ];
    }

}
