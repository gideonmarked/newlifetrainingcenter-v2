<?php 
class Cms575e507b39a97_1541599599Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the category name
    if ($this->category)
        $this->page->title = $this->category->name;
}

}
