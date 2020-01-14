import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
import java.sql.*;

public class Jorge_10_26_principal extends HttpServlet {

    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        HttpSession misesion;
        misesion = peticion.getSession(true);
        misesion.setMaxInactiveInterval(10);
        //misesion.setAttribute("listado", productos);
        
        List<Map<String , String>> studentList = new ArrayList<>();
        Map<String , String> productos = new HashMap();

        /* if (misesion.isNew() == true) {
            a = new Integer(1);
            c = new contador(1);
            misesion.setAttribute("Contador1", a);
            misesion.setAttribute("Contador2", c);
        } else {
            a = (Integer) misesion.getAttribute("Contador1");
            c = (contador) misesion.getAttribute("Contador2");
            a = new Integer(a.intValue() + 1);
            c.incrementar();
            misesion.setAttribute("Contador1", a);
            misesion.setAttribute("Contador2", c);
        } */

        {
            respuesta.setContentType("text/html");
            PrintWriter salida = respuesta.getWriter();
            String titulo = "Jorge 10.26";
            salida.println ("<TITLE>"+titulo+"</TITLE>\n");
            salida.println ("<BODY BGCOLOR=\"#FDF5E6\">\n");
            
           
            try
            {
                salida.println ("<H1 ALIGN=CENTER>"+titulo+"</H1>\n\n");
                DriverManager.registerDriver(new org.gjt.mm.mysql.Driver());
                String SourceURL = "jdbc:mysql://192.168.4.65:3306/bdprueba";
                String user = "miusuario";
                String password = "mipassword";
                Connection miconexion;
                miconexion = DriverManager.getConnection(SourceURL, user, password);
               
                Statement misentencia;
                ResultSet misresultados;
                misentencia=miconexion.createStatement();
                misresultados=misentencia.executeQuery ("SELECT nombre, precio FROM productos");
               
                salida.println(
                    "<TABLE BORDER=1 ALIGN=CENTER>\n"+
                    "<TR BGCOLOR=\"#FFAD00\">\n"+
                    "<TH>Producto<TH>Precio<TH>");
               
                while (misresultados.next())
                {
                    salida.println(
                        "<TR><TD>"+
                        misresultados.getString("nombre")+"\n<TD>"+
                        misresultados.getString("precio")+" &euro;"+"\n<TD>"+
                        "Añadir a Carrito");
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

        /* respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Tienda";
        salida.println("<TITLE>" + titulo + "</TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        salida.println("<BR>El contador 1 vale: " + a.intValue());
        salida.println("<BR>El contador 2 vale: " + c.valor());
        salida.println("<BR>Id de sesión: " + misesion.getId());
        salida.println("<BR>Inicio de sesión: " + new Date(misesion.getCreationTime()));
        salida.println("<BR>Último acceso a la sesión: " + new Date(misesion.getLastAccessedTime()));
        salida.println("</BODY></HTML>"); */
    }
}
