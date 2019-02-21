<a href="/">Home</a>
<?php 
foreach($pages->find("parent=/, sort=sort") as $p)
{
  echo "<a href='{$p->url}'>{$p->title}</a>";
}