
public abstract class Person {
    private final int identification; 
    private final String name;        

    public Person(int identification, String name) {
        this.identification = identification;
        this.name = name;
    }

    public String getName() {
        return this.name;
    }

    public int getIdentification() {
        return this.identification;
    }

    public abstract int calculateSalary();
}