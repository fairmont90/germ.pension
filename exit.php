<?php

require_once ('app/bootstrap.php');
session_start();

$old_user=$_SESSION['UserEmail'];
unset ($_SESSION['UserEmail']);
$result_dest=session_destroy();

/*/*//*$title="Exit";
$description="Exit";
$keywords="Exit";*/
/*do_html_header($title, $description, $keywords);*/
/*blok_left();

	echo '<div id="blok_right">';
	echo '<div class="blok_text">';
echo'<div class="text_top" align=left>';
do_html_heading($title);
if (!empty($old_user))
{
if ($result_dest)
{
// Если пользователь вошел в систему и теперь выходит из нее
echo 'Успешный выход из системы.<br>';
do_html_url('login.php', 'Exit');
}
else
{
// Пользователь вошел в систему и не может выйти из нее
echo 'Выход из системы невозможен.<br >';
}
}
else
{
// Если пользователь не входил в систему, но каким-то образом попал на эту страницу
echo 'Вы не входили в систему, поэтому и выходить из нее не нужно.<br />';
do_html_url('login.php', 'Exit');
}
echo '</div></div></div>';
do_html_footer(); *//*/*/