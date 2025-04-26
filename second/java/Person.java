public class Person {
    private int identification;
    private String names;
    private String lastNames;
    private float weight;
    private float stature;
    private int selection;

    public Person(int identification, String names, String lastNames, float weight, float stature, int selection) {
        this.identification = identification;
        this.names = names;
        this.lastNames = lastNames;
        this.weight = weight;
        this.stature = stature;
        this.selection = selection;
    }

    public int getIdentification() {
        return this.identification;
    }

    public String getNames() {
        return this.names;
    }

    public String getLastNames() {
        return this.lastNames;
    }

    public float getWeight() {
        return this.weight;
    }

    public float getStature() {
        return this.stature;
    }

    public int getSelection() {
        return this.selection;
    }
}
