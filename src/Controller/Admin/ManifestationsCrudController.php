<?php

namespace App\Controller\Admin;

use App\Entity\Manifestations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ManifestationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manifestations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('manif_titre'),
            TextEditorField::new('manif_description'),
            TextEditorField::new('manif_casting'),
            NumberField::new('manif_prix'),
            ImageField::new('manif_affiche')->setBasePath('uploads/manifs/')->setUploadDir('public/uploads/'),
            TextField::new('manif_heure'),
            DateField::new('manif_date'),
            AssociationField::new('lieu_id','Lieux'),
            AssociationField::new('genre_id','Genres')
        ];
    }

}
