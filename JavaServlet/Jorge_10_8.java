import java.io.*;
import java.util.ArrayList;

import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_10_8 extends HttpServlet {
    ArrayList<String> vector = new ArrayList<String>();
    int contador = 1;
    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        
        String cadena = "Número: ";
        vector.add(cadena + contador);

        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Jorge 10.8";
        salida.println("<TITLE>" + titulo + "</TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");

        for (String string : vector) {
            salida.println(string);
            salida.println("<br>");
        }
   
        salida.println("</BODY></HTML>");
        contador++;   
    }
}