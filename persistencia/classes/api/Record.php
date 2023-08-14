<?php

abstract class Record
{
    protected $data;

    public function __construct($id = null)
    {
        if ($id) 
        {
            $object = $this->load($id);
            if ($object) 
            {
                $this->fromArray($object->toArray());
            }
        }
    }

    public function __set($prop, $value)
    {
        if ($value === NULL)
        {
            unset($this->data[$prop]);
        }
        else 
        {
            $this->data[$prop] = $value;
        }
    }

    public function __get($prop)
    {
        if (isset($this->data[$prop]))
        {
            return $this->data[$prop];
        }
    }

    public function __isset($prop)
    {
        return isset($this->data[$prop]);
    }

    public function __clone()
    {
        unset($this->data['id']);
    }

    public function fromArray($data)
    {
        $this->data = $data;
    }

    public function toArray()
    {
        return $this->data;
    }

    public function getEntity()
    {
        $class = get_class($this);

        return constant("{$class}::TABLENAME");
    }

    public function load($id)
    {
        $sql = "SELECT * FROM {$THIS->GETeNTITY()} WHERE id='{$id}'";

        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            $result = $conn->query($sql);
            if ($result) 
            {
                return $result->fetchObject(get_class($this));
            }
        }
        else
        {
            throw new Exception("Não há transação ativa");
        }

    }

    public function store()
    {
        if (empty($this->data['id']) OR (!$this->load($this->data['id'])))
        {
            //INSERT

            $prepared = $this->prepare($this->data);

            if (empty($this->data['id'])) 
            {
                $prepared['id'] = $this->getLastId() + 1;
            }

            $sql = "INSERT INTO {$this->getEntity()}" . 
                    "(" . implode(', ', array_keys($prepared)) . ")" . 
                    "VALUES " . 
                    "(" . implode(', ', array_values($prepared)) . ")";

        }
        else
        {
            //UPDATE

            $prepared = $this->prepare($this->data);

            $set = [];

            
            foreach ($prepared as $key => $value) 
            {
                $set[] = "{$key} = $value";
            }
            $sql = "UPDATE {$this->getEntity()} SET " . implode(', ', $set) . "WHERE id=" . (int) $this->data['id'];
                    
        }


        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            return $conn->exec($sql);
        }
        else
        {
            throw new Exception("Não há transação ativa");
        }
    }

    public function delete($id = null)
    {

        $id = $id ? ((int) $id) : ((int) $this->data['id']);

        $sql = "DELETE FROM {$this->getEntity()} WHERE id={$id}"; 

        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            $result = $conn->query($sql);
        }
        else
        {
            throw new Exception("Não há transação ativa");
        }
    }

    public function getLastId()
    {
        $sql = "SELECT max(id) as max FROM {$this->getEntity()}"; 

        if ($conn = Transaction::get())
        {
            Transaction::log($sql);
            $result = $conn->query($sql);
            return $result->fecthObject()->max;
        }
        else
        {
            throw new Exception("Não há transação ativa");
        }
    }

    public function prepare($data)
    {
        $prepared = array();
        foreach ($data as $key => $value)
        {
            if (is_scalar($value)) 
            {
                $prepared[$key] = $this->escape($value);
            }
        }
        return $prepared;
    }

    public function escape($value)
    {
        if (is_string($value) and (!empty($value)))
        {
            // adiciona \ em aspas
            $value = addcslashes($value);
            return "'{$value}'";
        }
        else if (is_bool($value))
        {
            return $value ? 'TRUE' : 'FALSE';
        }
        else if ($value !== '')
        {
            return $value;
        }
        else 
        {
            return "NULL";
        }
    }

}