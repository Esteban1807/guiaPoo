public class Screen {
    private Laws laws;
    
    public Screen (Laws laws) {
        this.laws = laws;
    }
    public Laws getLaws() {
        if (this.laws.getName().equals("First law")) {
            this.laws = new LawOne("", this.laws.getForce(), "");
        } else
        if (this.laws.getName().equals("Second law")) {
            this.laws = new LawTwo("", this.laws.getForce(), "", 16, 20);
        } else
        if (this.laws.getName().equals("Third law")) {
            this.laws = new LawThree("", this.laws.getForce(), "");
        }
        return this.laws;
    }
    public static void main(String[] args) {
        Laws laws = new Laws("First law", 25, "");
        Screen screen = new Screen(laws);

        System.out.println("Name: " + screen.laws.getName());
        System.out.println("Force: " + screen.laws.getForce());
        System.out.println("Description:  " + screen.laws.getDescription());
        System.out.println(screen.laws.calculate());
    }
}