import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_3_6 extends HttpServlet {
    int contador;
    int contador2;
    int contador3;

    public void init() throws ServletException {
        contador = 1;
        contador2 = 10;
        contador3 = 60;
    }

    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 3.6";
        salida.println("<TITLE>" + titulo + "</TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        salida.println("El contador 1 vale: " + contador + "<br>");
        salida.println("El contador 2 vale: " + contador2 + "<br>");
        salida.println("El contador 3 vale: " + contador3 + "<br>");
        salida.println("</BODY></HTML>");
        contador++;
        contador2++;
        contador3++;
    }
}