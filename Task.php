<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 17/11/2014
 * Time: 15:46
 */

class Task {
        const STATUS_CANCELED = 0;
        const STATUS_PENDING = 1;
        const STATUS_ONGOING = 2;
        const STATUS_CLOSED = 3;


    /**
     * @var int
     */
    private $id;

    /**
     * @var String
     */
    private $name;

    /**
     * @var String
     */
    private $content;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $status;

    public function __construct()
    {
        echo 'Construct';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @throws Exception
     *
     * @return task
     */
    public function setId($id)
    {
        if (is_int($id))
        $this->id = $id;
        else
            throw new Exception('id Must be an integer !');

        return $this;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param String $name
     *
     * @return task
     */
    public function setName($name)
    {
        if (is_string($name))
            $this->name = $name;
        else
            throw new Exception('id Must be an String !');

        return $this;
    }

    /**
     * @return String
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param String $content
     *
     * @return task
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     *
     * @return task
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @throws Exception
     *
     * @return task
     */
    public function setStatus($status)
    {
        if (!in_array(
            $status,
            [
                self::STATUS_CLOSED,
                self::STATUS_PENDING,
                self::STATUS_ONGOING,
                self::STATUS_CANCELED,
            ]
        )){
            throw new Exception('Status is not valid !')
        }
        $this->status = $status;

        return $this;
    }

}
