import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

import java.util.*;

public class Jorge_3_11 extends HttpServlet {
    public void doPost(HttpServletRequest peticion, HttpServletResponse respuesta)
            throws ServletException, IOException {

        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = peticion.getParameter("titulo");
        String encabezado = peticion.getParameter("encabezado");
        String cuerpo = peticion.getParameter("cuerpo");

        
        salida.println("<HTML><header><title>"+titulo+"</title></header><BODY>");
        salida.println("<h1>"+titulo+"<h1>");
        salida.println("<h4>"+encabezado+"</h4>");
        salida.println("<p>"+cuerpo+"</p>");
         
        salida.println("</BODY></HTML>");
         
    }


}