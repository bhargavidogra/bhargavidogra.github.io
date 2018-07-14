<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
    <h2>Doctors' Appointment Schedule</h2>
    <table border="1">
      <tr bgcolor="#9acd32">
      <th>id</th>
      <th>DoctorName</th>
      <th>Speciality</th>
      <th>Monday</th>    
      <th>Tuesday</th> 
       <th>Wednesday</th>
       <th>Thursday</th>
       <th>Friday</th> 
       <th>Saturday</th>                              
    </tr>
    <xsl:for-each select="appointments/cd">
    <xsl:if test="id &gt;0">
      <tr>
         <td><xsl:value-of select="id"/></td>
        <td><xsl:value-of select="DoctorName"/></td>
        <td><xsl:value-of select="Speciality"/></td>
        <td><xsl:value-of select="Monday"/></td>
        <td><xsl:value-of select="Tuesday"/></td> 
        <td><xsl:value-of select="Wednesday"/></td> 
        <td><xsl:value-of select="Thursday"/></td> 
        <td><xsl:value-of select="Friday"/></td> 
        <td><xsl:value-of select="Saturday"/></td>         
      </tr>
    </xsl:if>
    </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
