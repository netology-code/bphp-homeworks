<?php

class DataRecordModel
{
    private $filename;
    private $guid;

    public function __construct(string $guid = null)
    {
        $this->filename = strtolower(static::class) . 's';
        $this->guid = $guid;
    }

    public function commit()
    {
        $data = new JsonDataArray($this->filename);
        if (is_null($this->guid)){
            $this->guid = $data->add($this);
        } else {
            $data->changeObjByGuid($this->guid, $this);
        }
        $data->save();
    }

    public function delete()
    {
        $data = new JsonDataArray($this->filename);
        if (!is_null($this->guid)){
            $this->guid = $data->byGuid($this->guid)->delete();
        }
        $data->save();
    }
}