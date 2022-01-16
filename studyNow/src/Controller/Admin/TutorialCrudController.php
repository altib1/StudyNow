<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Tutorial;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TutorialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tutorial::class;
    }


    public function configureFields(string $pageName): iterable
    {


        return [
            IdField::new('id')->hideOnForm(),
            AssociationField::new('lecategory'),
            AssociationField::new('steps'),
            AssociationField::new('ledifficulty'),
            TextField::new('name'),
            // TextEditorField::new('difficulty'),
            TextEditorField::new('description'),


        ];
    }

}
