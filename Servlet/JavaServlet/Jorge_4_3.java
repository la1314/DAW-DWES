import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_4_3 extends HttpServlet {
    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 4.3";
        salida.println("<TITLE>" + titulo + "</TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        int combinaciones = 6;

        salida.println("<table style = \"border: 1px solid pink\"");

        for (int a = 1; a < combinaciones; a++) {
            salida.println("<tr style = \"border: 1px solid pink\">");
            for (int b = 1; b < combinaciones; b++) {
                for (int c = 1; c < combinaciones; c++) {
            
                    salida.println("<td style = \"border: 1px solid pink\">"+a+""+b+""+c+ "</td>");
                }

            }
            salida.println("</tr>");
        }

        salida.println("</table>");
       // salida.println(contador + "<BR>");
        salida.println("</BODY></HTML>");
    }
}