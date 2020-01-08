import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;


public class Jorge_10_18 extends HttpServlet
{
    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta)
    throws ServletException, IOException
    {
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 10.18 Conexión JDBC a MySQL";
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
            misresultados=misentencia.executeQuery ("SELECT * FROM empleados where DNI = 22222222");
           
            salida.println(
                "<TABLE BORDER=1 ALIGN=CENTER>\n"+
                "<TR BGCOLOR=\"#FFAD00\">\n"+
                "<TH>DNI<TH>Nombre<TH>Sueldo<TH>PLus");
           
            while (misresultados.next())
            {
                salida.println(
                    "<TR><TD>"+
                    misresultados.getString("DNI")+"\n<TD>"+
                    misresultados.getString("nombre")+"\n<TD>"+
                    misresultados.getString("sueldo")+"\n<TD>"+
                    misresultados.getFloat("plus"));
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
