public class LawTwo extends Laws {
    private float bulk;
    private float acceleration;
    public LawTwo (String name, float force, String description, float bulk, float acceleration) {
        super("Second law", bulk*acceleration , "Force = Bulk * Acceleration");
        this.bulk = bulk;
        this.acceleration = acceleration;
    }

    public float getBulk() {
        return this.bulk;
    }

    public float getAcceleration() {
        return this.acceleration;
    }

    public Object calculate() {
        return this.getForce() + " = " + this.getBulk() + " * " + this.getAcceleration();
    }
}
