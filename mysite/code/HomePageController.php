<?php

namespace SilverStripe\Lessons;

use PageController;

class HomePageController extends PageController
{
  public function LatestArticles($count = 3)
  {
    return ArticlePage::get()
               ->sort('Date', 'DESC')
               ->limit($count);
  }
}
