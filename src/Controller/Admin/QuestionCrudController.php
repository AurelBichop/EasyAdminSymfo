<?php

namespace App\Controller\Admin;

use App\Entity\Question;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class QuestionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Question::class;
    }


    public function configureFields(string $pageName): iterable
    {

          yield IdField::new('id')
            ->onlyOnIndex();
          yield Field::new('name', 'Name');
          yield AssociationField::new('updatedBy')
            ->autocomplete();
          yield TextareaField::new('question')
            ->hideOnIndex();
          yield Field::new('votes', 'Total votes')
            ->setTextAlign('right');
          yield Field::new('createdAt')
            ->hideOnForm();

    }

}
