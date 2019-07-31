<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>New User Details</h2>
  <table border="1">
    <tr bgcolor="#blue">
      <th style="text-align:left">Account No.</th>
      <th style="text-align:left">User Name</th>
      <th style="text-align:left">Password</th>
      <th style="text-align:left">Gender</th>
      <th style="text-align:left">Date of Birth</th>
      <th style="text-align:left">E-mail ID</th>
      <th style="text-align:left">Mobile No.</th>
    </tr>
    <xsl:for-each select="details/user">
    <tr>
      <td><xsl:value-of select="acc"/></td>
      <td><xsl:value-of select="uname"/></td>
      <td><xsl:value-of select="pwd"/></td>
      <td><xsl:value-of select="gender"/></td>
      <td><xsl:value-of select="dob"/></td>
      <td><xsl:value-of select="email"/></td>
      <td><xsl:value-of select="mobile"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

