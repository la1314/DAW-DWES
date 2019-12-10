import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Jorge_3_7 extends HttpServlet {
    public void doGet(final HttpServletRequest peticion, final HttpServletResponse respuesta) throws ServletException, IOException {
        Cookie migalleta;
        Cookie migalleta2;
        Cookie migalleta3;
        Cookie[] misgalletas;
        
        misgalletas = peticion.getCookies();

        if (misgalletas == null) {
            migalleta = new Cookie("contador", "0");
            migalleta.setMaxAge(60); // 1 minuto
            
            migalleta2 = new Cookie("contador2", "10");
            migalleta2.setMaxAge(60);

            migalleta3 = new Cookie("contador3", "50");
            migalleta3.setMaxAge(60);

        } else {
            migalleta = misgalletas[0];
            migalleta2 = misgalletas[1];
            migalleta3 = misgalletas[2];
        }
        int contador;
        int contador2;
        int contador3;

        contador = Integer.parseInt(migalleta.getValue());
        contador2 = Integer.parseInt(migalleta2.getValue());
        contador3 = Integer.parseInt(migalleta3.getValue());

        migalleta.setValue("" + (contador + 1)); // setValue acepta un string, no un entero.
        migalleta2.setValue("" + (contador2 + 2));
        migalleta3.setValue("" + (contador3 + 3));

        respuesta.addCookie(migalleta);
        respuesta.addCookie(migalleta2);
        respuesta.addCookie(migalleta3);
        respuesta.setContentType("text/html");
        
        final PrintWriter salida = respuesta.getWriter();
        final String titulo = "Contadores de galletas";
        
        salida.println("<TITLE> Jorge 3.7 </TITLE>\n<BODY>");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n\n");
        salida.println("El contador nº1 vale: " + contador + "<br>");
        salida.println("El contador nº2 vale: " + contador2 + "<br>");
        salida.println("El contador nº3 vale: " + contador3 + "<br>");
        salida.println("</BODY></HTML>");
    }
}