import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_4_1 extends HttpServlet {
    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        PrintWriter impresor;
        impresor = respuesta.getWriter();
        respuesta.setContentType("text/html");
        impresor.println("<HTML>\n" + "<HEAD><TITLE>Jorge 4.1</TITLE></HEAD>\n" + "<BODY>\n" + "<H1>Ejercicio 4.1</H1>\n" +
                "<table>"+
                "<th>Nombre</th>"+
                "<th>Apellido</th>"+
                "<tr>"+
                "<td>Pepe</td>"+
                "<td>Vilches</td>"+
                "</tr>"+
                "<tr>"+
                "<td>Marta</td>"+
                "<td>Alvarado</td>"+
                "</tr>"+
                "</table>" +
                "</BODY></HTML>");
    }
}
