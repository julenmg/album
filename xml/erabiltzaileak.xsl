<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<table>
	<tr>
		<th>Eposta</th>
		<th>Izena</th>
		<th>Abizenak</th>
	<th>Telefonoa</th>
	</tr>
	<xsl:for-each select="erabiltzaileak/erabiltzailea">
	<tr>
		<td><xsl:value-of select="eposta"/></td>
		<td><xsl:value-of select="izena"/></td>
		<td><xsl:value-of select="abizena1"/>,<xsl:value-of select="abizena2"/></td>
		<td><xsl:value-of select="telefonoa"/></td>
	</tr>
	</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>
