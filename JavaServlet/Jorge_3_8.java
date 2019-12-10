import java.io.*;
import java.util.ArrayList;

import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_3_8 extends HttpServlet {
    Integer contador;
    ArrayList<Integer> vector = new ArrayList<Integer>();

    public void doGet(HttpServletRequest peticion, HttpServletResponse respuesta) throws ServletException, IOException {
        HttpSession misesion;
        misesion = peticion.getSession(true);
        if (misesion.isNew() == true) {
            contador = new Integer(1);
            misesion.setAttribute("Contador", contador);
            vector.add(contador);

        } else {
            contador = (Integer) misesion.getAttribute("Contador");
            contador = new Integer(contador.intValue() + 1);
            misesion.setAttribute("Contador", contador);
            vector.add(contador);
        }
        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Contador";
        salida.println("<TITLE> Jorge 3.8 </TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        for (Integer valor : vector) {
            salida.println(valor);
            salida.println("<br>");
        }
        salida.println("</BODY></HTML>");
    }
}
