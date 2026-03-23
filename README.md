# retosSOLID

Un reto individual por cada principio (S, O, L, I, D). + Un reto final que combine los cinco principios en un caso más completo.

1. Primer reto SRP:
   - SRP + FACTORY.
     Beneficio Explicación

     Desacoplamiento: La clase Application o BookController no necesita conocer los detalles de HtmlPrinter o PlainPrinter.

     Extensibilidad: Si agregas una nueva impresora (PdfPrinter), solo creas una nueva factoría o amplías la existente sin tocar las demás clases.

     Cumple con OCP (Open/Closed Principle): Tu sistema está “abierto a la extensión, cerrado a la modificación”.

     Responsabilidad única clara Cada clase tiene su propio rol: PrinterFactory crea, Printer imprime, Book contiene datos, Controller coordina.

     Reutilización y pruebas: Puedes testear cada clase aisladamente (por ejemplo, probar Book sin preocuparte por la impresión).

2. Segundo reto OCP:
   - OCP + FACTORY.
     Beneficio Explicación

     Desacoplamiento: La clase Application o DescuentoController no necesita conocer los detalles de DescuentoVip o DescuentoRegular.

     Extensibilidad: Si agregas un nuevo tipo de descuento (DescuentoPremium), solo creas una nueva estrategia y factoría sin tocar las demás clases.

     Cumple con OCP (Open/Closed Principle): Tu sistema está “abierto a la extensión, cerrado a la modificación”.

     Responsabilidad única clara Cada clase tiene su propio rol: DescuentoFactory crea estrategias, EstrategiaDescuento calcula descuentos, Cliente contiene datos, Controller coordina.

     Reutilización y pruebas: Puedes testear cada clase aisladamente (por ejemplo, probar Cliente sin preocuparte por los descuentos).

3. Tercer reto LISKOV:
   - LSP + METODO PAGO / METODO REEMBOLSABLE.
     Beneficio Explicación

     Sustituibilidad: `procesarPago(MetodoPago $metodo)` acepta `PagoConTarjeta` o `PagoConCripto` sin modificar la lógica del cliente.

     Contrato claro: `PagoConTarjeta` implementa ambos `MetodoPago` y `MetodoReembolsable`, `PagoConCripto` solo `MetodoPago`.

     Cumple con LSP (Liskov Substitution Principle): cualquier objeto que cumpla la interfaz `MetodoPago` puede usarse donde se espera `MetodoPago`.

     Responsabilidad única clara: `MetodoPago` maneja pagos, `MetodoReembolsable` maneja reembolsos; el código de proceso no necesita saber la implementación concreta.

     Reutilización y pruebas: se puede probar `procesarPago` con distintas estrategias de pago y `procesarReembolso` sólo con métodos reembolsables.

4. Cuarto reto ISP:
   - ISP + NOTIFICADOR EMAIL / NOTIFICADOR SMS.
     Beneficio Explicación

     Segregación de interfaces: `NotificadorEmail` y `NotificadorSMS` están separadas, evitan métodos no utilizados.

     Implementaciones enfocadas: `NotificadorEmailSimple` implementa solo `enviarEmail`; `NotificadorSMSimple` implementa solo `enviarSMS`.

     Cumple con ISP: cada cliente depende de la interfaz mínima necesaria para su operación.

     Responsabilidad única clara: envío de emails en una clase, envío de SMS en otra clase, funciones de proceso independientes.

     Reutilización y pruebas: se puede testear `procesarEnvioEmail` con distintos proveedores de email y `procesarEnvioSMS` con distintos proveedores de SMS.

5. Quinto reto DIP:

   - DIP + REPOSITORIO PRODUCTO (MySQL / Mongo).
      Beneficio Explicación

      Inversión de dependencias: ServicioProducto depende de la abstracción RepositorioProducto, no de implementaciones concretas como RepositorioProductoMySQL o RepositorioProductoMongo.

      Desacoplamiento: el servicio no está ligado a una base de datos específica, puede trabajar con cualquier implementación que cumpla la interfaz.

      Flexibilidad y extensibilidad: se pueden añadir nuevas fuentes de datos (API, caché, etc.) sin modificar ServicioProducto.

      Inyección de dependencias: el repositorio se pasa por el constructor, permitiendo cambiar la implementación en tiempo de ejecución.

      Cumple con DIP: las clases de alto nivel (ServicioProducto) dependen de abstracciones, y las de bajo nivel (MySQL, Mongo) implementan esas abstracciones.

      Responsabilidad clara: acceso a datos en los repositorios, lógica de negocio en el servicio, cada componente tiene una función bien definida.

      Reutilización y pruebas: se puede testear ServicioProducto usando repositorios falsos o mocks sin necesidad de conexión a base de datos rea

### Resumen del Repositorio

Ambos retos (SRP + FACTORY y OCP + FACTORY) cumplen con todos los principios SOLID, ya que están diseñados siguiendo buenas prácticas de arquitectura. A continuación, te detallo cómo cada principio se aplica en ambos casos, basado en el análisis del código:

#### Principios SOLID comunes a ambos retos:

1. **SRP (Single Responsibility Principle - Principio de Responsabilidad Única)**:  
   Cada clase tiene una única responsabilidad. Por ejemplo:
   - En el primer reto: `Printer` imprime, `Book` contiene datos, `PrinterFactory` crea instancias.
   - En el segundo reto: `EstrategiaDescuento` calcula descuentos, `Cliente` maneja datos del cliente, `DescuentoFactory` crea estrategias.

2. **OCP (Open/Closed Principle - Principio Abierto/Cerrado)**:  
   Los módulos están abiertos a extensión pero cerrados a modificación. Puedes agregar nuevas funcionalidades (e.g., una nueva impresora o tipo de descuento) sin cambiar el código existente, gracias al uso de interfaces y factories.

3. **LSP (Liskov Substitution Principle - Principio de Sustitución de Liskov)**:  
   Las implementaciones de las interfaces son sustituibles sin alterar el comportamiento del programa. Por ejemplo:
   - En el primer reto: Cualquier `Printer` (HtmlPrinter o PlainPrinter) puede reemplazarse en el controller.
   - En el segundo reto: Cualquier `EstrategiaDescuento` (DescuentoVip o DescuentoRegular) funciona indistintamente.

4. **ISP (Interface Segregation Principle - Principio de Segregación de Interfaces)**:  
   Las interfaces son específicas y no obligan a implementar métodos innecesarios. Por ejemplo:
   - `Printer` solo define `printPages`.
   - `EstrategiaDescuento` solo define `calcular`.

5. **DIP (Dependency Inversion Principle - Principio de Inversión de Dependencias)**:  
   Los módulos de alto nivel no dependen de los de bajo nivel; ambos dependen de abstracciones (interfaces). Los factories inyectan dependencias concretas a través de interfaces, desacoplando el código.

En resumen, ambos retos son ejemplos sólidos de aplicación de SOLID, combinando patrones como Factory con principios específicos para lograr un diseño extensible, mantenible y testable.
