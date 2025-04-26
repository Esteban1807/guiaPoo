public class LawThree extends Laws {
    public LawThree (String name, float force, String description) {
        super("Third law", force , "To every action there is an equal and opposite reaction.");
    }

    public Object calculate() {
        return this.getForce() * -1;
    }
}
