import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;


public class Jorge_10_17 extends HttpServlet
{
    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta)
    throws ServletException, IOException
    {
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 10.17 Conexión JDBC a MySQL";
        salida.println ("<TITLE>"+titulo+"</TITLE>\n");
        salida.println ("<BODY BGCOLOR=\"#FDF5E6\">\n");
        salida.println ("<H1 ALIGN=CENTER>"+titulo+"</H1>\n\n");
       
        try
        {
            DriverManager.registerDriver(new org.gjt.mm.mysql.Driver());
            String SourceURL = "jdbc:mysql://192.168.4.67:3306/bdprueba";
            String user = "miusuario";
            String password = "mipassword";
           
            Connection miconexion;
            miconexion = DriverManager.getConnection(SourceURL, user, password);
           
            Statement misentencia;
            ResultSet misresultados;
            misentencia=miconexion.createStatement();
            misresultados=misentencia.executeQuery ("SELECT nombre, sueldo FROM empleados");
           
            salida.println(
                "<TABLE BORDER=1 ALIGN=CENTER>\n"+
                "<TR BGCOLOR=\"#FFAD00\">\n"+
                "<TH>Nombre<TH>Sueldo");
           
            while (misresultados.next())
            {
                salida.println(
                    "<TR><TD>"+
                    misresultados.getString("nombre")+"\n<TD>"+
                    misresultados.getFloat("sueldo"));
            }
            salida.println("</TABLE></BODY></HTML>");
            miconexion.close();
        }
        catch (SQLException sqle)
        {
            salida.println(sqle);
            salida.println("</BODY></HTML>");
        }
    }
}
