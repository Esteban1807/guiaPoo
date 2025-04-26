public class RegisterGym {
    private Person person;
    private Plan plan;

    public RegisterGym(Person person, Plan plan) {
        this.person = person;
        this.plan = plan;
    }

    public Person getPerson() {
        return this.person;
    }

    public Plan getPlan() {
        if (this.getPerson().getSelection() == 1) {
            this.plan = new Basic("", 0, "");
        } else
        if (this.getPerson().getSelection() == 2) {
            this.plan = new Medium("", 0, "");
        } else
        if (this.getPerson().getSelection() == 3) {
            this.plan = new Premium("", 0, "");
        }
        return this.plan;
    }
    public static void main(String[] args) {
        Person person = new Person(21, "Esteban", "Ome", 67, 167, 2); 
        RegisterGym registerGym = new RegisterGym(person, null);

        System.out.println("Identification: " + registerGym.person.getIdentification());
        System.out.println("Names: " + registerGym.person.getNames());
        System.out.println("Last names: " + registerGym.person.getLastNames());
        System.out.println("Weight: " + registerGym.person.getWeight());
        System.out.println("Stature: " + registerGym.person.getStature());
        System.out.println("PLAN: " + registerGym.person.getSelection());
        System.out.println("Name: " + registerGym.getPlan().getName());
        System.out.println("Cost: " + registerGym.getPlan().getCost());
        System.out.println("Service: " + registerGym.getPlan().getService());
    }
}
