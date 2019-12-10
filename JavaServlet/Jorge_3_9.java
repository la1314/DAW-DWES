import java.io.*;
import java.util.ArrayList;

import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_3_9 extends HttpServlet {
    Integer contador;
    ArrayList<String> vector = new ArrayList<String>();

    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        HttpSession misesion;
        misesion = peticion.getSession(true);
        if (misesion.isNew() == true) {
            contador = new Integer(1);
            misesion.setAttribute("Contador", contador);
            vector.add("Otra vez: " + contador);

        } else {
            contador = (Integer) misesion.getAttribute("Contador");
            contador = new Integer(contador.intValue() + 1);
            misesion.setAttribute("Contador", contador);
            vector.add("Otra vez: " + contador);
        }
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Otra vez contador";
        salida.println("<TITLE> Jorge 3.9 </TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        for (String valor : vector) {
            salida.println(valor);
            salida.println("<br>");
        }
        salida.println("</BODY></HTML>");
    }
}
