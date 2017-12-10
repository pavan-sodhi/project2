<?php

class todos extends database\collection
{
    protected static $modelName = 'todo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    public static  function findTasksbyID($userid)
    {
       $tableName =  get_called_class();
       $sql = 'Select * from'. $tableName.'where id=  ?';
       $recordsSet = self::getResults($sql,$userid);
       if (isNull($recordsSet))
       {
           return FALSE:
       }
       else
       {
           return $recordsSet[0];
       }
    }
}

?>
