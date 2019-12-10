import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

import java.util.*;

public class Jorge_3_10 extends HttpServlet {
    public void doPost(HttpServletRequest peticion, HttpServletResponse respuesta)
            throws ServletException, IOException {

        respuesta.setContentType("text/html");
        PrintWriter salida = respuesta.getWriter();
        String titulo = "Resultado";
        int num1 = Integer.parseInt(peticion.getParameter("num1"));
        int num2 = Integer.parseInt(peticion.getParameter("num2"));
        String operador = peticion.getParameter("operador");

        float resultado = 0;
        String error = "";
        if (num2 == 0) {
            error = "No es posible dividir entre 0";
        } else {
            switch (operador) {
                case "+":
                    resultado = num1 + num2;
                    break;
        
                case "-":
                    resultado = num1 - num2;
                    break;
                case "*":
                    resultado = num1 * num2;
                    break;
                case "/":
                    resultado = num1 / num2;
                    break;
                }
        }

        String url = "/web/Jorge_3_10.html";

        salida.println("<BODY BGCOLOR=\"#FDF5E6\">\n");
        salida.println("<H1 ALIGN=CENTER>" + titulo + "</H1>\n");
        if (num2 == 0) {
            salida.println(error);
        } else {
            salida.println("El resultado de " + num1 + " " + operador + " " + num2 + " es: " + resultado);
        }
        
        salida.println("<FORM ACTION='/web/Jorge_3_10.html' METHOD='POST'>");
        salida.println("<CENTER>");
        salida.println("<button TYPE='SUBMIT'>Volver a calcular</button>");
        salida.println("</CENTER>");
        salida.println("</FORM>");

        salida.println("</BODY></HTML>");
         
    }


}