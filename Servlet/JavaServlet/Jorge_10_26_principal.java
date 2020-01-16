import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.util.*;
import java.sql.*;

public class Jorge_10_26_principal extends HttpServlet {

    ArrayList<String> lista = new ArrayList<String>();

    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {

        {
            HttpSession misesion;
            misesion = peticion.getSession(true);

            respuesta.setContentType("text/html");
            PrintWriter salida = respuesta.getWriter();
            String titulo = "Jorge 10.26";
            salida.println("<TITLE>" + titulo + "</TITLE>\n");
            salida.println("<BODY BGCOLOR=\"#FDF5E6\">\n");

            try {
                salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
                DriverManager.registerDriver(new org.gjt.mm.mysql.Driver());
                String SourceURL = "jdbc:mysql://192.168.4.65:3306/bdprueba";
                String user = "miusuario";
                String password = "mipassword";
                Connection miconexion;
                miconexion = DriverManager.getConnection(SourceURL, user, password);

                Statement misentencia;
                ResultSet misresultados;
                misentencia = miconexion.createStatement();
                misresultados = misentencia.executeQuery("SELECT * FROM productos");

                salida.println("<TABLE BORDER=1 ALIGN=CENTER>\n" + "<TR BGCOLOR=\"#FFAD00\">\n"
                        + "<TH>Producto<TH>Precio<TH>");

                while (misresultados.next()) {

                    String nombre = misresultados.getString("nombre");
                    String precio = misresultados.getString("precio");
                    int id = misresultados.getInt("id");

                    salida.println("<FORM ACTION='/Proyecto1/Jorge_10.26_principal' METHOD='POST'>");
                    salida.println("<INPUT TYPE='hidden' value='" + id + "' NAME='id'>");

                    salida.println("<TR><TD>" +

                            nombre + "\n<TD>" + precio + " &euro;" + "\n<TD>"
                            + "<button type=''>Añadir a Carrito</button>");

                    salida.println("</FORM>");

                }
                salida.println("</TABLE>");

                salida.println("<FORM ACTION='/Proyecto1/Jorge_10.26_principal' METHOD='POST'>");

                // if (session.getAttribute("Username") == null ||
                // session.getAttribute("Username").equals(""))

                salida.println("<button type=''>Enviar pedidos</button>");
                salida.println("</FORM>");

                salida.println("</BODY></HTML>");
                miconexion.close();
            } catch (SQLException sqle) {

                salida.println(sqle);
                salida.println("</BODY></HTML>");
            }
        }
    }

    public void doPost(HttpServletRequest peticion, HttpServletResponse respuesta)
            throws ServletException, IOException {

        HttpSession misesion;
        misesion = peticion.getSession(true);
        misesion.setMaxInactiveInterval(10);

        String productos = peticion.getParameter("id");

        lista.add(productos);

        misesion.setAttribute("lista", lista);

        {
            respuesta.setContentType("text/html");
            PrintWriter salida = respuesta.getWriter();
            String titulo = "Jorge 10.26";
            salida.println("<TITLE>" + titulo + "</TITLE>\n");
            salida.println("<BODY BGCOLOR=\"#FDF5E6\">\n");

            try {
                salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
                DriverManager.registerDriver(new org.gjt.mm.mysql.Driver());
                String SourceURL = "jdbc:mysql://192.168.4.65:3306/bdprueba";
                String user = "miusuario";
                String password = "mipassword";
                Connection miconexion;
                miconexion = DriverManager.getConnection(SourceURL, user, password);

                Statement misentencia;
                ResultSet misresultados;
                misentencia = miconexion.createStatement();
                misresultados = misentencia.executeQuery("SELECT * FROM productos");

                salida.println("<TABLE BORDER=1 ALIGN=CENTER>\n" + "<TR BGCOLOR=\"#FFAD00\">\n"
                        + "<TH>Producto<TH>Precio<TH>");

                while (misresultados.next()) {

                    String nombre = misresultados.getString("nombre");
                    String precio = misresultados.getString("precio");
                    int id = misresultados.getInt("id");

                    salida.println("<FORM ACTION='/Proyecto1/Jorge_10.26_principal' METHOD='POST'>");
                    salida.println("<INPUT TYPE='hidden' value='" + id + "' NAME='id'>");

                    salida.println("<TR><TD>" +

                            nombre + "\n<TD>" + precio + " &euro;" + "\n<TD>"
                            + "<button type=''>Añadir a Carrito</button>");

                    salida.println("</FORM>");

                }
                salida.println("</TABLE>");

                ArrayList<String> lista = (ArrayList<String>) misesion.getAttribute("lista");

                salida.println("<FORM ACTION='/Proyecto1/Jorge_10.26_envio' METHOD='POST'>");

                salida.println("<INPUT TYPE='hidden' value='" + lista + "' NAME='ids'>");
                

                salida.println("<button type=''>Enviar pedidos</button>");

                salida.println("</FORM>");

                salida.println("</BODY></HTML>");
                miconexion.close();
            } catch (SQLException sqle) {

                salida.println(sqle);
                salida.println("</BODY></HTML>");
            }


        }

    }

}
