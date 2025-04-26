public class LicenseB extends Licenses {

    public LicenseB(int cost, int duration, String description) {
        super(20000, 80, "Private vehicles");
    }

    public float calculate() {
        return this.getCost() * this.getDuration();
    }
}
