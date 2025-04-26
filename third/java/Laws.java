public class Laws {
    private String name;
    private float force;
    private String description;

    public Laws (String name, float force, String description) {
        this.name = name;
        this.force = force;
        this.description = description;
    }

    public String getName() {
        return this.name;
    }

    public float getForce() {
        return this.force;
    }

    public String getDescription() {
        return this.description;
    }
    public Object calculate() {
        return "Nada";
    }
}
