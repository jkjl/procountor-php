<?php
namespace Procountor\Interfaces\Read;

use Procountor\Interfaces\TransactionCommon;
use Procountor\Collection\AttachmentCollection;


interface Transaction extends TransactionCommon {
    //Unique identifier for the ledger transaction. Automatically generated by Procountor and present in the object returned. ,
    public function getTransactionId(): int;
}
