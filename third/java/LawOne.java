public class LawOne extends Laws {
    public LawOne (String name, float force, String description) {
        super("First law", force , "If force = zero, the object maintains its state.");
    }
    public Object calculate() {
        if (this.getForce() == 0) {
            return "The object maintains its state.";
        } else {
            return "The object does not maintain its state.";
        }
    }
}
