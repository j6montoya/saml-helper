<?php

/*
 * An "enum" for the different attribute name ID formats.
 */


declare(strict_types = 1);

namespace Programster\Saml;


final class AttributeNameIdFormat implements \Stringable
{
    private string $m_format;


    private function __construct(string $format)
    {
        $this->m_format = $format;
    }


    public function createUnspecified() : AttributeNameIdFormat { return new AttributeNameIdFormat('urn:oasis:names:tc:SAML:2.0:attrname-format:unspecified'); }
    public function createUri() : AttributeNameIdFormat { return new AttributeNameIdFormat('urn:oasis:names:tc:SAML:2.0:attrname-format:uri'); }
    public function createBasic() : AttributeNameIdFormat { return new AttributeNameIdFormat('urn:oasis:names:tc:SAML:2.0:attrname-format:basic'); }


    public function __toString()
    {
        return $this->m_format;
    }
}
