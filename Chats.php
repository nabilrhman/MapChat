<?php


/**
 * chat model
 *
 * PHP version 5.4
 */

include 'Model.php';

class Chat extends Model
{

    /**
     * Get all the chats as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        try {
            $db = static::getDB();

            $stmt = $db->query('SELECT Chats.body, Chats.timestamp, 
  		                               Users.first_name, Users.last_name, Users.email, Users.lat, Users.lng, Users.is_online 
	                                   FROM Chats
	                                   LEFT JOIN Users ON Users.user_id = Chats.user_id');
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }


    }
}
