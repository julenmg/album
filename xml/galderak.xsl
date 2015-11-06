<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

		<table border="1">
			<tr>
				<th style="text-align:left">Zailtasuna</th>
				<th style="text-align:left">Gaia</th>
				<th style="text-align:left">Galdera</th>
				
			</tr>
			<xsl:for-each select="assessmentItems/assessmentItem">
				<tr>
					<td><xsl:value-of select="@complexity"/></td>
					<td><xsl:value-of select="@subject"/></td>
					<td><xsl:value-of select="itemBody/p"/></td>
					
				</tr>
			</xsl:for-each>
		</table>

</xsl:template>
</xsl:stylesheet>
