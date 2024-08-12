<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : doc.xsl
    Created on : May 22, 2022, 11:25 PM
    Author     : Ramona
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>doc.xsl</title>
            </head>
            <body>
                <xsl:element name="a">
                    <xsl:attribute name="href">
                        <xsl:value-of select="parentnode/link_url"/>
                    </xsl:attribute>
                    <span>Site anterior</span>
                </xsl:element>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
