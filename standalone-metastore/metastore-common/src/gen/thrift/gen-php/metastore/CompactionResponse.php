<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class CompactionResponse
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'state',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'accepted',
            'isRequired' => true,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'errormessage',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $id = null;
    /**
     * @var string
     */
    public $state = null;
    /**
     * @var bool
     */
    public $accepted = null;
    /**
     * @var string
     */
    public $errormessage = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['state'])) {
                $this->state = $vals['state'];
            }
            if (isset($vals['accepted'])) {
                $this->accepted = $vals['accepted'];
            }
            if (isset($vals['errormessage'])) {
                $this->errormessage = $vals['errormessage'];
            }
        }
    }

    public function getName()
    {
        return 'CompactionResponse';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->state);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->accepted);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->errormessage);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('CompactionResponse');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I64, 1);
            $xfer += $output->writeI64($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->state !== null) {
            $xfer += $output->writeFieldBegin('state', TType::STRING, 2);
            $xfer += $output->writeString($this->state);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->accepted !== null) {
            $xfer += $output->writeFieldBegin('accepted', TType::BOOL, 3);
            $xfer += $output->writeBool($this->accepted);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errormessage !== null) {
            $xfer += $output->writeFieldBegin('errormessage', TType::STRING, 4);
            $xfer += $output->writeString($this->errormessage);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
