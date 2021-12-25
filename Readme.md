# Software Design Principles

### Solid Principle

- **Single Responsibility Principle:** 

    Don’t put all your worker eggs in a single basket. A class should have one reason to change.


- **Open/Closed Principle:**

   Don’t change the same class over and over. If you find this happening, abstract out what is changing.


- **Listov Substitution Principle:**

   Return the same type in an overridden subclass method as a parent class method. The same applies for a
   method’s parameters. Be consistent.


- **Interface Segregation Principle:**

   Don’t create interfaces with many (more than five) methods. This is a sign that you’re doing too much in
   one place.


- **Dependency Inversion Principle:**

   Rely on interfaces and abstract classes more than concrete classes. This will be more flexible.


**Encapsulate What Varies:**
   
   Only abstract away things that vary in your application. For example, if a Mailer class will never change,
   don’t get hung up on writing a lot of abstraction around that: focus on what will change.

## Design Patterns: 
 Creational | Behavior | Structural 
--- | --- | --- 
[Singleton](src/Creational/singleton/readme.md) | [Strategy](src/Behavior/strategy/readme.md) | 
[Factory Method](src/Creational/FactoryMethod/readme.md) | [Chains of Responsibility](src/Behavior/ChainsOfResponsibility/readme.md) | 