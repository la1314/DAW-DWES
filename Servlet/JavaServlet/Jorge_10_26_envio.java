import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
import java.sql.*;

public class Jorge_10_26_envio extends HttpServlet {

    public void doPost(HttpServletRequest peticion, HttpServletResponse respuesta)
            throws ServletException, IOException {

        // Se llama al recibir el POST del GET anterior
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 10.26 Envio";
        salida.println("<TITLE>" + titulo + "</TITLE>\n");
        salida.println("<BODY BGCOLOR=\"#FDF5E6\">\n");
        /*
         * salida.println("<H1 ALIGN=CENTER>Añadir nuevo empleado</H1>\n\n");
         * salida.println("<FORM ACTION='/Proyecto1/Jorge_10.21' METHOD='POST'>");
         * salida.println("DNI");
         * salida.println("<INPUT TYPE='number' NAME='DNI'><BR>");
         * salida.println("Nombre");
         * salida.println("<INPUT TYPE='text' NAME='nombre'><BR>");
         * salida.println("Sueldo");
         * salida.println("<INPUT TYPE='number' NAME='sueldo'><BR>");
         * salida.println("Plus");
         * salida.println("<INPUT TYPE='number' NAME='plus'><BR>");
         * salida.println("<CENTER>"); salida.println("<INPUT TYPE='SUBMIT'>");
         * salida.println("</CENTER>"); salida.println("</FORM>");
         * salida.println("<BR><BR>"); salida.println("</BODY></HTML>");
         */

        try {
            DriverManager.registerDriver(new org.gjt.mm.mysql.Driver());
            String SourceURL = "jdbc:mysql://192.168.4.65:3306/bdprueba";
            String user = "miusuario";
            String password = "mipassword";

            String lista = peticion.getParameter("ids");
            String[] lista_id = lista.replace("[", "").replace("]", "").split(",");

            Connection miconexion;
            miconexion = DriverManager.getConnection(SourceURL, user, password);

            Statement misentencia;
            ResultSet misresultados;
            misentencia = miconexion.createStatement();

            salida.println("<TABLE BORDER=1 ALIGN=CENTER>\n" + "<TR BGCOLOR=\"#FFAD00\">\n" + "<TH>Nombre<TH>Precio");

            int costeEnvio = 2 + lista_id.length;
            float total = 0;

            for (int i = 0; i < lista_id.length; i++) {

                lista_id[i] = lista_id[i].replace(" ", "").replace("+", "");
                
                misresultados = misentencia.executeQuery("SELECT * FROM productos where id = " + lista_id[i] + ";");

                 while (misresultados.next()) {

                    String nombre = misresultados.getString("nombre");
                    String precio = misresultados.getString("precio");

                    total += Float.parseFloat(misresultados.getString("precio"));
                    
                    salida.println("<TR><TD>" + nombre + "\n<TD>" + precio);
                } 
            }

            total += costeEnvio;
      
            salida.println("<TR><TD>Coste envio\n" + "<TD>" + costeEnvio);
            salida.println("<TR><TD>TOTAL\n" + "<TD>" + total);

            salida.println("</TABLE>");
            salida.println("</BODY></HTML>");
            miconexion.close();
        } catch (SQLException sqle) {
            salida.println(sqle);
            salida.println("</BODY></HTML>");
        }
    }
}
