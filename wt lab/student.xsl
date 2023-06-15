<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns="http://www.w3.org/1999/xhtml">

  <xsl:template match="/">
    <html>
      <head>
        <title>Student Details</title>
      </head>
      <body>
        <h2>Student Details</h2>
        <xsl:for-each select="students/student">
          <div>
            <h3>VTU Student Description</h3>
            <p>
              <span style = "font-style: italic; color: blue;">USN:</span>
              <xsl:value-of select="USN" />
            </p>
            <p>
              <span style = "font-style: italic; color: blue;">Name:</span>
              <xsl:value-of select="name" />
            </p>
            <p>
              <span style = "font-style: italic; color: blue;">College:</span>
              <xsl:value-of select="college" />
            </p>
            <p>
              <span style = "font-style: italic; color: blue;">Branch:</span>
              <xsl:value-of select="branch" />
            </p>
            <p>
              <span style = "font-style: italic; color: blue;">Year of Join:</span>
              <xsl:value-of select="YOJ" />
            </p>
            <p>
              <span style = "font-style: italic; color: blue;">E-Mail:</span>
              <xsl:value-of select="email" />
            </p>
          </div>
        </xsl:for-each>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>