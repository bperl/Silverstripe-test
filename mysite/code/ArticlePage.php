<?php

namespace SilverStripe\Lessons;

use SilverStripe\Forms\DateField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use Page;

class ArticlePage extends Page
{
  private static $table_name = 'ArticlePage';

  private static $can_be_root = false;

  private static $db = [
    'Date' => 'Date',
    'Teaser' => 'Text',
    'Author' => 'Varchar',
  ];

  public function getCMSFields()
{
  $fields = parent::getCMSFields();
  $fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article'),'Content');
  $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser'),'Content');
  $fields->addFieldToTab('Root.Main', TextField::create('Author','Author of article'),'Content');

  return $fields;
}

}
