<?php

/**
 * Class PhpCsvValidator
 */
class PhpCsvValidator
{

    /**
     * CSV Schema
     * @var PhpCsvValidatorScheme
     */
    private $scheme = "";

    /**
     * Error Messages
     * @var array
     */
    private $errorMessages = array();

    /**
     * PhpCsvValidator constructor.
     * @param PhpCsvValidatorScheme|null $scheme
     *
     * @throws PhpCsvValidatorException
     */
    function __construct($scheme = null)
    {
        if (!is_null($scheme)) {
            if ($scheme instanceof PhpCsvValidatorScheme) {
                $this->setSchema($scheme);
            } else {
                throw new PhpCsvValidatorException("Invalid Scheme!");
            }
        }
    }

    /**
     * @param string $row
     * @return bool
     */
    public function isValidRow($row)
    {
        if(preg_match($this->getSchema()->regex, $row)) {
            return true;
        }

        return false;
    }

    /**
     * Validate CSV File against Scheme
     *
     * @param string $file
     * @return bool
     *
     * @throws PhpCsvValidatorException
     */
    public function isValidFile($file)
    {
        if (!is_readable($file)) {
            throw new PhpCsvValidatorException("Could not Read CSV File!");
        }

        $rows = file($file);
        foreach ($rows as $row) {
            if (!$this->isValidRow($row)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param string $file
     * @return PhpCsvValidator
     *
     * @throws PhpCsvValidatorException
     */
    public function loadSchemaFromFile($file)
    {
        if (!is_readable($file)) {
            throw new PhpCsvValidatorException("Could not Read Scheme File!");
        }

        $this->setSchema(new PhpCsvValidatorScheme(file_get_contents($file)));
    }

    /**
     * @return PhpCsvValidatorScheme
     */
    public function getSchema()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return PhpCsvValidator
     */
    public function setSchema($scheme)
    {
        $this->scheme = $scheme;

        return $this;
    }

    /**
     * @return array
     */
    public function getErrorMessages()
    {
        return $this->errorMessages;
    }

    /**
     * @param string $message
     * @return PhpCsvValidator
     */
    public function setErrorMessages($message)
    {
        $this->errorMessages[] = $message;

        return $this;
    }
}

/**
 * Class PhpCsvValidatorException
 */
class PhpCsvValidatorException extends Exception
{
    /**
     * PhpCsvValidatorException constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}

/**
 * Class PhpCsvValidatorScheme
 */
class PhpCsvValidatorScheme
{

    /**
     * @var string
     */
    public $label = "";

    /**
     * @var string
     */
    public $regex = "";

    /**
     * @var int
     */
    public $skipFirstLine = 0;

    /**
     * PhpCsvValidatorScheme constructor.
     * @param bool $json
     */
    public function __construct($json = false)
    {
        if ($json) {
            $this->set(json_decode($json, true));
        }
    }

    /**
     * @param $data
     */
    public function set($data)
    {
        foreach ($data AS $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}