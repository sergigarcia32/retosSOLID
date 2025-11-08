# retosSOLID
Un reto individual por cada principio (S, O, L, I, D). + Un reto final que combine los cinco principios en un caso más completo.
1. Primer reto SRP:
    - SRP + FACTORY.
        Beneficio	Explicación

        Desacoplamiento:	La clase Application o BookController no necesita conocer los detalles de HtmlPrinter o PlainPrinter.

        Extensibilidad:	Si agregas una nueva impresora (PdfPrinter), solo creas una nueva factoría o amplías la existente sin tocar las demás clases.

        Cumple con OCP (Open/Closed Principle):	Tu sistema está “abierto a la extensión, cerrado a la modificación”.

        Responsabilidad única clara	Cada clase tiene su propio rol: PrinterFactory crea, Printer imprime, Book contiene datos, Controller coordina.

        Reutilización y pruebas:	Puedes testear cada clase aisladamente (por ejemplo, probar Book sin preocuparte por la impresión).


