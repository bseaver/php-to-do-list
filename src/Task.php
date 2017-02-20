<?php
class Task
{
    private $description;
    private $id;


    function __construct($new_description, $new_id = null)
    {
        $this->setDescription($new_description);
        $this->setId($new_id);
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    function setId($new_id)
    {
        $this->id = $new_id;
    }

    function getId()
    {
        return $this->id;
    }

    function save()
    {
        $GLOBALS['DB']->exec("INSERT INTO tasks (description) VALUES ('{$this->getDescription()}');");
        $this->setId($GLOBALS['DB']->lastInsertId());
    }

    static function getAll()
      {
        $returned_tasks = $GLOBALS['DB']->query("SELECT * FROM tasks;");
        $tasks = array();
        foreach($returned_tasks as $task) {
            $description = $task['description'];
            $id = $task['id'];
            $new_task = new Task($description, $id);
            array_push($tasks, $new_task);
        }
        return $tasks;
      }


    static function deleteAll()
    {
        $GLOBALS['DB']->exec("DELETE FROM tasks;");
    }

    static function retrieveById($id)
    {
        $retrieved = null;

        $returned_task = $GLOBALS['DB']->exec("SELECT * FROM tasks WHERE id = '$id';");

        if (count($returned_task) == 1) {
            $retrieved = new Task (
                $returned_task['description'],
                $returned_task['id']
            );
        }

        return $retrieved;
    }

    static function find($search_id)
    {
        $found_task = null;
        $tasks = Task::getAll();
        foreach($tasks as $task) {
            $task_id = $task->getId();
            if ($task_id == $search_id) {
                $found_task = $task;
            }
        }
        return $found_task;
    }

}
?>
