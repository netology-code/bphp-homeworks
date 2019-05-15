<?php
/**
 * function for view render
 *
 * @param string $layout
 * @param string|null $page
 * @param array|null $data
 */

function renderView(string $layout, string $page = null, array $data = null)
{
    ob_start();
    require TASK_PATH . '\views\pages\\' . $page . '.php';
    $content = ob_get_clean();
    require TASK_PATH . '\views\layouts\\' . $layout . '.php';
}