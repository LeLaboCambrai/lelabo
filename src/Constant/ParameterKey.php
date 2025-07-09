<?php

namespace App\Constant;

use DateTimeInterface;

class ParameterKey
{
    const INT = "int";
    const STRING = "string";
    const DECIMAL = "decimal";
    const BOOLEAN = "boolean";
    const ARRAY ="ArrayOf";
    const NODE = "NODE";
    const TYPES = [
        self::INT,
        self::DECIMAL,
        self::BOOLEAN,
        self::STRING
    ];

    const SINGLEWSDL = "?singleWsdl";
    const WSDL = "?wsdl";
    const OUTPUT = "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:cat=\"http://www.carter-cash.com/CatalogueService\">\n<soapenv:Header/>\n<soapenv:Body>\n</soapenv:Body>\n</soapenv:Envelope>";
    const VERSION = "1.6.1";
    const NONAME = "Webservices ATLAS";
    const UPDATE = DateTimeInterface::RFC822;
    const ATOMIC = "atomic";
    const LIST = "list";
    const STRUCT = "struct";
}